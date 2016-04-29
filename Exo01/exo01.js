window.onload = function() {
    document.forms['allumettes'].onsubmit = function () {

        var errorBlock = document.getElementById('error-message');
        var successBlock = document.getElementById('success-message');
        errorBlock.innerHTML = '';
        successBlock.innerHTML = '';

        var formOK = true;

        var number = this.elements['number[]'];
        var numberSelected = [];

        for (var m in number) {
            if (number[m].checked == true) {
                numberSelected.push(number[m].value);
            }
        }

        if (numberSelected.length === 0) {
            errorBlock.innerHTML += '<br>Veuillez choisir au moins une allumette';
            formOK = false;
        }

        else if (numberSelected.length > 3) {
            errorBlock.innerHTML += '<br>Vous ne pouvez choisir que 3 allumettes ';
            formOK = false;
        }

        else {
            number.remove(number.checked);
            formOK = true;
        }
        return false;
    }
}
