let html = "";

products.forEach((product) => {
  html += `
        <div class="card">
          <div class="img">
            <img
              src="${product.image}"
              alt="${product.imageDescription.name}"
            />
          </div>
          <div class="desc">
            <h2>${product.imageDescription.name}</h2>
            <p>${product.imageDescription.price}frw</p>
            <div class="product-quantity-container">
              <select>
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <button class="js-addToCart-button">add to cart</button>
          </div>
        </div>
    `;
});

document.querySelector(".cards").innerHTML = html;

let quantity = 0;
document.querySelectorAll(".js-addToCart-button").forEach((button) => {
  button.addEventListener("click", () => {
    quantity += 1;
    document.querySelector(".cart-quantity").innerHTML = quantity;
  });
});
