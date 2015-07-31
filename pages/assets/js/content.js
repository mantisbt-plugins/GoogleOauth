var Client, Localize, Magnet, Preference, TransmissionClient,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  __hasProp = {}.hasOwnProperty;

String.prototype.capitalize = function() {
  return this.replace(/^./, function(match) {
    return match.toUpperCase();
  });
};

Preference = {
  cache: {},
  template: {
    transmission: {
      ip: "192.168.1.1",
      port: 9091,
      url: "/transmission/rpc"
    }
  },
  initialize: function() {
    var key, value;
    for (key in localStorage) {
      value = localStorage[key];
      Preference.cache[key] = value;
      if (location.href.indexOf(chrome.runtime.id + "/preferences")) {
        $("#pref" + key.capitalize()).val(value);
      }
    }

    $("#prefPort").val("9091");
    $("#prefUrl").val("/transmission/rpc");
  },
  get: function(key) {
    if (Preference.cache.hasOwnProperty(key)) {
      return Preference.cache[key];
    } else {
      return Preference.cache[key] = localStorage[key];
    }
  },
  set: function(key, value) {
    localStorage[key] = value;
    return Preference.cache[key] = value;
  },
  clearCache: function() {
    localStorage.clear();
    return Preference.cache = {};
  },
  bind: function() {
    $("#prefType").change(function() {
      var template, type;
      type = $(this).val();
      template = Preference.template[type];
      $("#prefPort").val(template.port);
      $("#prefUrl").val(template.url);
      return $("#prefToken").val("");
    });
    return $("#prefSave").click(function() {
      Preference.clearCache();
      Preference.set("type", $("#prefType").val());
      Preference.set("ip", $("#prefIp").val());
      Preference.set("port", $("#prefPort").val());
      Preference.set("url", $("#prefUrl").val());

      var client;
      client = new TransmissionClient;

      client.fetchToken();

      return alert(chrome.i18n.getMessage("prefSaveComplete"));
    });
  }
};

Localize = {
  init: function() {
    $('[i18n-content]').each(function(index, element) {
      return element.innerHTML = chrome.i18n.getMessage($(this).attr('i18n-content'));
    });
  },
  bind: function() {
    return document.addEventListener('DOMContentLoaded', Localize.init);
  }
};

Client = (function() {
  function Client() {}

  Client.prototype.fetchToken = function() {};

  Client.prototype.send = function(url) {};

  return Client;

})();

TransmissionClient = (function(_super) {
  __extends(TransmissionClient, _super);

  function TransmissionClient() {}

  TransmissionClient.prototype.fetchToken = function() {
    var http, params, targetUrl;
    targetUrl = "http://" + ($("#prefIp").val()) + ":" + ($("#prefPort").val()) + Preference.template.transmission.url;
    http = new XMLHttpRequest();
    http.open("POST", targetUrl, true);
    http.setRequestHeader("Content-Type", "application/json");
    params = {
      "method": "torrent-add"
    };
    params = JSON.stringify(params);
    http.onreadystatechange = function() {
      var match;
      if (http.readyState === 4 && http.status === 409) {
        match = http.responseText.toString().match(/<code>.*?: (.*?)<\/code>/);
        if (match[1]) {
          $("#prefToken").val(match[1]);
          Preference.set("token", $("#prefToken").val());
          return $("#prefToken").val(match[1]);
        }
      }
    };
    return http.send();
  };

  TransmissionClient.prototype.send = function(url) {
    var http, params, targetUrl;
    targetUrl = "http://" + (Preference.get("ip")) + ":" + (Preference.get("port")) + (Preference.get("url"));
    params = "";
    http = new XMLHttpRequest();
    http.open("POST", targetUrl, true);
    http.setRequestHeader("Content-Type", "application/json");
    http.setRequestHeader("X-Transmission-Session-Id", Preference.get("token"));
    params = {
      "method": "torrent-add",
      "arguments": {
        "paused": false,
        "filename": url
      }
    };
    params = JSON.stringify(params);
    http.onreadystatechange = function() {
      var json;
      if (http.readyState === 4 && http.status === 200) {
        json = JSON.parse(http.responseText);
        if (json.result === "success") {
          return alert(chrome.i18n.getMessage("magnetAddSuccess"));
        } else {
          alert(JSON.stringify(json));
          return chrome.tabs.create({
            url: "chrome-extension://" + chrome.runtime.id + "/preferences.html"
          });
        }
      }
    };
    return http.send(params);
  };

  return TransmissionClient;

})(Client);

Magnet = {
  init: function() {
    if (chrome.contextMenus) {
      chrome.contextMenus.create({
        'title': chrome.i18n.getMessage("contextMenusLabel"),
        'documentUrlPatterns': ['http://*/*', 'https://*/*'],
        'contexts': ['link'],
        'id': 'alleentest'
      }, function() {});
      if (!chrome.contextMenus.onClicked.hasListeners()) {
        return chrome.contextMenus.onClicked.addListener(Magnet.handler);
      }
    }
  },
  handler: function(info, tab) {
    var bg, url;
    url = info.srcUrl;
    if (url === void 0) {
      url = info.linkUrl;
    }
    if (!url) {
      return;
    }
    bg = chrome.extension.getBackgroundPage();
    return bg.Magnet.send(url);
  },
  send: function(url) {
    var client;
    if (Preference.cache.type === "transmission") {
      client = new TransmissionClient;
    }
    else {
      Preference.initialize();
      return Preference.bind();
    }
    client.send(url);
  }
};

Localize.bind();

Magnet.init();

$(function() {
  Preference.initialize();
  return Preference.bind();
});

chrome.browserAction.onClicked.addListener(function(tab) {
  return chrome.tabs.create({
    url: "chrome-extension://" + chrome.runtime.id + "/preferences.html"
  });
});
