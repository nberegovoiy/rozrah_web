async function func(symb) {
    let link = 'https://api.coingecko.com/api/v3/coins/'
    let response = await fetch(link + symb)

    let data = await response.json()

    let change = Number(data['market_data']['price_change_percentage_24h']);
    change = change.toFixed(2);

    // printGraphic
    printGraphic(data['symbol'].toUpperCase() + 'USDT');

    // First row(name, id, prices)
    document.getElementById('small_img').src = data['image'].small;
    document.getElementById('crypto_name').innerHTML = data['name'] + '(' + data['symbol'].toUpperCase() + ')';
    document.getElementById('crypto_price').innerHTML = data['market_data']['current_price'].usd + ' $';
    document.getElementById('price_change_perc_24h').innerHTML = change + '%';

    // Color changes depending on price changes
    if (change < 0) {
        document.getElementById('price_change_perc_24h').style.color = 'red';
    } else {
        document.getElementById('price_change_perc_24h').style.color = 'green';
    }

    // Market rank
    document.getElementById('market_rank').innerHTML = 'Rank #' + data['market_data']['market_cap_rank'];
    document.getElementById('market_rank').style.color = 'white';

    // Website link
    document.getElementById('web_link').innerHTML = data['links']['homepage'];
    document.getElementById('web_link').href = data['links']['homepage'][0];

    // Source code links
    document.getElementById('source_code_link').href = data['links']['repos_url']['github'][0];

    // Tag
    document.getElementById('tag').innerHTML = data['categories']
    document.getElementById('tag').style.color = 'blue';

    let num;
    num = data['market_data']['market_cap']['usd'];
    num = new_func(num);
    document.getElementById('market_cap_vol1').innerHTML = '$' + num;
    num = data['market_data']['fully_diluted_valuation']['usd'];
    num = new_func(num);
    document.getElementById('dil_val1').innerHTML = '$' + num;
    num = data['market_data']['total_volume']['usd'];
    num = new_func(num);
    document.getElementById('traiding_vol1').innerHTML = '$' + num;
    num = data['market_data']['low_24h']['usd'];
    num = new_func(num);
    document.getElementById('low_high1').innerHTML = '$' + num + ' / $';
    num = data['market_data']['high_24h']['usd'];
    num = new_func(num);
    document.getElementById('low_high1').innerHTML += num;
    num = data['market_data']['total_volume']['usd'];
    num = new_func(num);
    document.getElementById('circ_sup1').innerHTML = data['market_data']['circulating_supply'] + ' / ' + data['market_data']['total_supply'];
    num = data['market_data']['max_supply'];
    num = new_func(num);
    document.getElementById('max_supply1').innerHTML = num;
}

function new_func(num) {
    // num = '604 199 407 772';    

    num = String(num);

    for (let i = num.length - 1; i >= 0; i--) {
        if (i % 3 == 0 && i != num.length - 1 && i != 0) {
            num = num.slice(0, i) + "," + num.slice(i);
        }
    }

    return num;
}

function getCoinInfo() {
    let symb = document.getElementById('search_inp').value;

    if (symb == "") {
        alert("Ви нічого не ввели!");
    } else {
        func(symb);
    }

}

function printGraphic(symb) {


    new TradingView.MediumWidget({
        "symbols": [
            [
                "Apple",
                symb
            ]
        ],
        "chartOnly": false,
        "width": 700,
        "height": 400,
        "locale": "ru",
        "colorTheme": "light",
        "gridLineColor": "#F0F3FA",
        "trendLineColor": "#2196F3",
        "fontColor": "#787B86",
        "underLineColor": "#E3F2FD",
        "isTransparent": false,
        "autosize": false,
        "container_id": "tradingview_fe11e"
    });
}