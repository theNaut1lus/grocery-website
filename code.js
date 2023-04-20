const product_list = document.getElementById('product-list');

function check(params) {
    product_list.innerHTML = '';
    let arr = [...params.children];
    arr.pop(); //remove last div
    // console.log(arr);
    
    arr.forEach((element, index) => {
        console.log(index);
        console.log(element.innerHTML);
        if(index == 0)
        {
        }
        else if(index == 1)
        {
            product_list.innerHTML += `<li class="gap-4">
                                    <img class="class="bi text-body-secondary"" src="./images/food.svg" alt="..."><br>
                                    <div>
                                        <h5 class="display-5 preview-headings">`+ element.innerHTML +`</h5>
                                    </div></li>`
        }
        else if(index == 2)
        {
            product_list.innerHTML += `<li class="gap-4">
                                    <div>
                                        <p class="bold">Price</p>
                                        <p class="listing"> AUD `+ element.innerHTML +`</p>
                                    </div></li>`
        }
        else 
        {
            product_list.innerHTML += `<li class="gap-4">
                                    <div>
                                        <p class="listing">`+ element.innerHTML +`</p>
                                    </div></li>`
        }
    });
    document.getElementById('cart-button').disabled = false;
}

// JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()