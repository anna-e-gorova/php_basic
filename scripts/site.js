$(document).ready(function(){
    if ($('#promo').length > 0) {
        $('#content').removeAttr('id');
    }
});

function addToCart(goodId, userId) {
    $.ajax({
        url: 'serverCart.php', 
        type: 'POST', 
        data: {product: goodId,
                userId: userId}, 
        error: function (req, text, error) {
            alert('Ошибка!' + text + ' | ' + error);
		}
    });
    alert("Товар добавлен");
};

function delFromCart(goodId, userId) {
    $.ajax({
        url: 'serverCart.php', 
        type: 'POST', 
        data: {product: goodId,
                userId: userId,
                action: 'del'}, 
        error: function (req, text, error) {
            alert('Ошибка!' + text + ' | ' + error);
		}
    });
    alert("Товар удален");
};

function createOrder(id) {
    $.ajax({
        url: 'createOrder.php', 
        type: 'POST', 
        data: {userId: id}, 
        error: function (req, text, error) {
            alert('Ошибка!' + text + ' | ' + error);
		}
    });
    alert("Заказ оформлен");
};
