let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0, 
});

fetch('querryTextData.php')
    .then(response => response.json())
    .then(data => {

        console.log(data);
        const monthlyEarnValue = document.getElementById('monthlyEarnValue');
        monthlyEarnValue.textContent = USDollar.format(data.monthlyEarn);
        
        const annualEarnValue = document.getElementById('annualEarnValue');
        annualEarnValue.textContent = USDollar.format(data.annualEarn);

        const topSellerProduct = document.getElementById('topSellerProduct');
        topSellerProduct.textContent = data.topSeller;
    })
    .catch(error => {
        console.error('Error:', error);
    });
