

// Inisialisasi Signature Canvas
const canvas = document.getElementById("signatureCanvas");
if (canvas) {
    canvas.width = 300;
    canvas.height = 150;
    let ctx = canvas.getContext("2d");
    let drawing = false;

    canvas.addEventListener("mousedown", (e) => {
        drawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    canvas.addEventListener("mousemove", (e) => {
        if (!drawing) return;
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
    });

    canvas.addEventListener("mouseup", () => drawing = false);
    canvas.addEventListener("mouseleave", () => drawing = false);

    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
}

// Booking Form Submission
document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("submit_booking.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            alert("Booking berhasil disimpan!");
            document.getElementById("bookingForm").reset();

            // Tutup modal jika ada
            var bookingModal = document.getElementById("bookingModal");
            var modalInstance = bootstrap.Modal.getInstance(bookingModal);
            if (modalInstance) {
                modalInstance.hide();
            }

            // Redirect setelah modal tertutup
            setTimeout(function() {
                window.location.href = "#gallery";
            }, 500);
        } else {
            alert("Terjadi kesalahan: " + data);
        }
    })
    .catch(error => console.error("Error:", error));
});


// Google Maps Init
function initMap() {
    var nail = { lat: -6.372267, lng: 106.815872 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: nail
    });

    var marker = new google.maps.Marker({
        position: nail,
        map: map,
        title: "D’cember Luxe",
        animation: google.maps.Animation.BOUNCE
    });
    // Menambahkan label di samping marker
var labelDiv = document.createElement("div");
labelDiv.className = "marker-label";
labelDiv.innerHTML = "D’cember Luxe";

var overlay = new google.maps.OverlayView();
overlay.onAdd = function () {
    var layer = this.getPanes().overlayLayer;
    layer.appendChild(labelDiv);
};
overlay.draw = function () {
    var projection = this.getProjection();
    var position = projection.fromLatLngToDivPixel(marker.getPosition());
    labelDiv.style.left = position.x + "px";
    labelDiv.style.top = position.y + "px";
};
overlay.setMap(map);
}

//custumer review
document.addEventListener("DOMContentLoaded", function () {
    fetch("get_reviews.php")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("reviews-container");

            data.forEach(review => {
                const reviewCard = document.createElement("div");
                reviewCard.classList.add("review-card");
                reviewCard.innerHTML = `
                    <p>"${review.review}"</p>
                    <em>- ${review.name}</em><br>
                    <small>${review.created_at}</small>
                `;
                container.appendChild(reviewCard);
            });
        })
        .catch(error => {
            console.error("Error fetching reviews:", error);
        });
});

// Ketika tombol submit di-klik
document.getElementById("submitReview").addEventListener("click", function () {
    let name = document.getElementById("reviewName").value.trim();
    let review = document.getElementById("reviewText").value.trim();

    if (name === "" || review === "") {
        alert("Please fill in both fields.");
        return;
    }

    // Kirim review ke server (PHP)
    fetch("submit_review.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `name=${encodeURIComponent(name)}&review=${encodeURIComponent(review)}`
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === "success") {
            // Tampilkan review ke UI langsung
            const container = document.getElementById("reviews-container");
            const reviewCard = document.createElement("div");
            reviewCard.classList.add("review-card");
            reviewCard.innerHTML = `
                <p>"${review}"</p>
                <em>- ${name}</em><br>
                <small>Just now</small>
            `;
            container.prepend(reviewCard); // Tampilkan di paling atas

            // Bersihkan input
            document.getElementById("reviewName").value = "";
            document.getElementById("reviewText").value = "";
        } else {
            alert("Error: " + result.message);
        }
    })
    .catch(error => {
        console.error("Submit error:", error);
        alert("Failed to submit review.");
    });
});





