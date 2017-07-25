/* TWITTER */

var twitter_username = 'diogosilvamusic';

$.ajax({
    url: "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names="+twitter_username,
    dataType : 'jsonp',
    crossDomain : true,
}).done(function(data) {
    $(".twitter").text((data[0]['followers_count'].toFixed(1)/10000) + "k");
});



/* INSTAGRAM */

var token = '3225360069.1677ed0.71235a0e17fa473da819cd2e863f8a92';

$.ajax({
    url: 'https://api.instagram.com/v1/users/self',
    dataType: 'jsonp',
    type: 'GET',
    data: {access_token: token},
    success: function(data){
        var followers = data['data']['counts']['followed_by'];

        console.log(followers.length)

        $(".instagram").text(followers);

        if(followers < 1000000){
            $(".instagram").text((followerss.toFixed(1)/1000) + "k");
        }else{
            $(".instagram").text((followers.toFixed(1)/1000000) + "m");
        }
    },
    error: function(data){
        console.log(data);
    }
});


/* YOUTUBE */

var ajax = {};
ajax.x = function() {
    if (typeof XMLHttpRequest !== 'undefined') {
        return new XMLHttpRequest();
    }
    var versions = [
        "MSXML2.XmlHttp.6.0",
        "MSXML2.XmlHttp.5.0",
        "MSXML2.XmlHttp.4.0",
        "MSXML2.XmlHttp.3.0",
        "MSXML2.XmlHttp.2.0",
        "Microsoft.XmlHttp"
    ];

    var xhr;
    for (var i = 0; i < versions.length; i++) {
        try {
            xhr = new ActiveXObject(versions[i]);
            break;
        } catch (e) {}
    }
    return xhr;
};

ajax.send = function(url, callback, method, data, async) {
    if (async === undefined) {
        async = true;
    }
    var x = ajax.x();
    x.open(method, url, async);
    x.onreadystatechange = function() {
        if (x.readyState == 4) {
            callback(x.responseText)
        }
    };
    if (method == 'POST') {
        x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    }
    x.send(data)
};

ajax.get = function(url, data, callback, async) {
    var query = [];
    for (var key in data) {
        query.push(encodeURIComponent(key) + '=' + encodeURIComponent(data[key]));
    }
    ajax.send(url + (query.length ? '?' + query.join('&') : ''), callback, 'GET', null, async)
};
//Fim da API do Ajax

var antigo = "";
function subs() {
    ajax.get('http://dev.planetsweb.com.br/publico/API/youtubeAPI.php', {
        canal: 'diogosilvaoficial',
    }, function(res) {

        var json = JSON.parse(res);
        var inscrito = json.Inscritos;
        var valor = formatarValor(parseInt(inscrito));
        document.getElementById('inscritos').innerHTML = "";
        var codigo = "";
        for (var i=0; i<valor.length; i++)
        {
            if (antigo[i] != valor[i])
                codigo += "<span id='mudou'>" + valor[i] + "</span>";
            else
                codigo += "<span id='igual'>" + valor[i] + "</span>";
        }
        antigo = valor;
        document.getElementById('inscritos').innerHTML = codigo;
    });

    function formatarValor(valor) {
        return valor.toLocaleString('pt-BR');
    }
}
subs();
setInterval(subs, 2000);
