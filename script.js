// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("productForm");

  // Basic client-side validation
  form.addEventListener("submit", function (e) {
    const name = form.name.value.trim();
    const price = parseFloat(form.price.value);
    const quantity = parseInt(form.quantity.value);

    if (!name || price <= 0 || quantity < 0) {
      alert("Please enter valid product details.");
      e.preventDefault(); // Stop form submission
    }
  });

  // Confirm before deleting a product
  const deleteForms = document.querySelectorAll("form[action='delete.php']");
  deleteForms.forEach((delForm) => {
    delForm.addEventListener("submit", function (e) {
      const confirmed = confirm("Are you sure you want to delete this product?");
      if (!confirmed) {
        e.preventDefault();
      }
    });
  });
});