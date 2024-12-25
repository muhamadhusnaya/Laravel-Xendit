// SEARCH BAR 
function handleSearch(event){
    const searchTerm = event.target.value.toLowerCase();
    const productList = document.getElementById('row');
    const products = productList.getElementsByClassName('col-sm-6 col-md-4 col-lg-3');

    Array.from(products).forEach(product => {
        const productName = product.getAttribute('data-name').toLowerCase();
        if (productName.includes(searchTerm)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Add event listener to search bar
document.getElementById('searchInput').addEventListener('input', handleSearch);