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