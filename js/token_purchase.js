$(function() {
    console.log('token_purchase.js');

    let cost_per_token = 0.01;

    $('#buy_amount').bind('input', () => {
        let buy_amount = $('#buy_amount').val();
        let cost = cost_per_token * Number(buy_amount);
        cost = Math.round(cost * 10000000) / 10000000;

        $('#buy_cost').val(cost);
    })

    $('#btn_buy').click(() => {
        let buy_amount = $('#buy_amount').val();
        buy_amount = Number(buy_amount);
        let cost = cost_per_token * buy_amount;
        cost = Math.round(cost * 10000000) / 10000000;
        let wallet_address = $('#wallet_address').val();
        

        if (!buy_amount) {
            alert('please input valid token amount');
            return;
        }

        if (cost < 0.01) {
            alert('Cost must be greater than 0.01');
            return;
        }

        if (!wallet_address) {
            alert('please input wallet address');
            return;
        }

        console.log(buy_amount, cost, wallet_address);

        $('#form_buy').submit();
    })
});