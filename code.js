const product_list = document.getElementById('product-list');

function check(params) {
    let arr = [...params.children];
    arr.pop(); //remove last div
    // console.log(arr);
    
    arr.forEach(element => {
        console.log(element.innerHTML);
        product_list.innerHTML += `<li class="d-flex gap-4">
                                <svg class="bi text-body-secondary flex-shrink-0" width="48" height="48">
                                    <use xlink:href="#grid-fill"></use>
                                </svg>
                                <div>
                                    <p class="listing">`+ element.innerHTML +`</p>
                                </div>`
    });

}