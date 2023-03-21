$(document).ready(function () {
    $.ajax({
        url: "/api/rentals",
        type: "GET"
    }).done(function (data) {
        let rentals = data.data;
        let rentalsHtml = '';
        for (let i = 0; i < rentals.length; i++) {
            let rental = rentals[i];
            rentalsHtml += `
<div class="col-12 col-md-6 col-lg-4">
   <div class="card bg-light text-dark h-100">
      <div class="m-2"><img class="img-fluid rounded" src="/img/${rental.image}" alt="rental"></div>
      <div class="card-body position-relative pb-5">
         <h3 class="card-title text-center mx-1">${rental.name}</h3>
         <hr class="hr"/>
         <div class="card-content">

         <div class="row">
    <div class="col d-flex justify-content-start align-items-start">
        <img class="rounded" src="/img/car-top-view-icon.svg" alt="price" style="height: 30px; width: 30px;">
        <p class="d-flex justify-content-start ms-2"> Markė:</p>
    </div>
    <div class="col">
        <p class="d-flex justify-content-end fw-bold">${rental.brand}</p>
    </div>
</div>

         <div class="row">
    <div class="col d-flex justify-content-start align-items-start">
        <img class="rounded" src="/img/car-document-icon.svg" alt="price" style="height: 30px; width: 30px;">
        <p class="d-flex justify-content-start ms-2">Modelis:</p>
    </div>
    <div class="col">
        <p class="d-flex justify-content-end fw-bold">${rental.model}</p>
    </div>
</div>


         <div class="row">
         <div class="col d-flex justify-content-start align-items-start">
         <img class="rounded" src="/img/list-view-icon.svg" alt="price" style="height: 30px; width: 30px;">
            <p class="d-flex justify-content-start ms-2">Kategorija:</p>
         </div>
         <div class="col text-end">
            <p class="d-flex justify-content-end fw-bold">${rental.category_id}</p>
         </div>
         </div>
         <div class="row">
         <div class="col d-flex justify-content-start align-items-start">
         <img class="rounded" src="/img/price-tag-euro-icon.svg" alt="price" style="height: 30px; width: 30px;">
            <p class="d-flex justify-content-start ms-2">Kaina:</p>
         </div>
         <div class="col">
            <p class="d-flex justify-content-end fw-bold">${rental.price}</p>
         </div>
         </div>


        <div class="row">
         <div class="col d-flex justify-content-start align-items-start">
           <img class="rounded" src="/img/manual-transmission-icon.svg" alt="gearbox" style="height: 30px; width: 30px;">
            <p class="d-flex justify-content-start ms-2">Pavarų dėžė:</p>
         </div>
         <div class="col">
            <p class="d-flex justify-content-end fw-bold"> ${rental.gearbox_id}</p>
         </div>
        </div>

        <div class="row">
        <div class="col d-flex justify-content-start align-items-start">
        <img class="rounded" src="/img/gas-station-icon.svg" alt="fuel" style="height: 30px; width: 30px;">
        <p class="d-flex justify-content-start ms-2">Kuro tipas:</p>
        </div>
        <div class="col">
        <p class="d-flex justify-content-end fw-bold">${rental.fuel_type_id}</p>
        </div>
        </div>


         </div>
                  <div class="d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle">
                             <a role="button" class="btn text-light ms-1 me-1 greentodarkgreen"
                       href="/rental/${rental.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                        Peržiūrėti
                    </a>
</div>
      </div>
   </div>
</div>
                `;
        }
        $('#rentals').html(rentalsHtml);
    }).fail(function (data) {
        console.log(data);
    });
});



//categories

$(document).ready(function () {
    $.ajax({
        url: "/api/categories",
        type: "GET",
    }).done(function (data) {
        let categories = data.data;
        let categoriesHtml = '';
        for (let i = 0; i < categories.length; i++) {
            let category = categories[i];
            categoriesHtml += `
<div class="col-12 col-md-6 col-lg-4">
   <div class="card bg-light text-dark h-100">
      <div class="m-2"><img class="img-fluid rounded" src="/img/${category.image}" alt="rental"></div>
      <div class="card-body position-relative pb-5">
         <h3 class="card-title text-center mx-1">${category.name}</h3>
         <hr class="hr"/>
         <div class="card-content">

         <div class="row">
    <div class="col d-flex justify-content-start align-items-start">
        <p class="d-flex justify-content-start ms-2"> Aprašymas:</p>
    </div>
</div>

         <div class="row">
    <div class="col d-flex justify-content-start align-items-start">
        <p class="d-flex justify-content-start ms-2">${category.description}</p>
    </div>
</div>

         </div>
                  <div class="d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle">
                             <a role="button" class="btn text-light ms-1 me-1 greentodarkgreen"
                       href="/category/${category.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                        Peržiūrėti
                    </a>
</div>

      </div>
   </div>
</div>
                `;
        }
        $('#categories').html(categoriesHtml);
    }).fail(function (data) {
        console.log(data);
    });
});






