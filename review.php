 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>The Product Review and Rating</title>
    <style>

body {
    font-family: Arial, sans-serif;
   background-image: url("data:image/jpeg;base64,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");
   background-repeat: no-repeat;
  background-size: 100% 100%;
  

    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
 
.container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 400px;
}
 
h1 {
    font-size: 24px;
    margin: 0;
}
 
.rating {
    font-size: 20px;
    margin: 10px 0;
}
 
.stars {
    font-size: 30px;
    margin: 10px 0;
}
 
.star {
    cursor: pointer;
    margin: 0 5px;
}
 
.one {
    color: rgb(255, 0, 0);
}
 
.two {
    color: rgb(255, 106, 0);
}
 
.three {
    color: rgb(251, 255, 120);
}
 
.four {
    color: rgb(255, 255, 0);
}
 
.five {
    color: rgb(24, 159, 14);
}
 
textarea {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
 
button {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 
button:hover {
    background-color: #0056b3;
}
 
.reviews {
    margin-top: 20px;
    text-align: left;
}
 
.review {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin: 10px 0;
}
 
.review p {
    margin: 0;
}
    </style>
</head>
 
<body>
    <div class="container">
        <h1> CS CAFETERIA</h1>
        <div class="rating">
            <span id="rating">0</span>/5
        </div>
        <div class="stars" id="stars">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
        </div>
        <p>Share your review:</p>
        <textarea id="review"
                  placeholder="Write your review here">
          </textarea>
        <button id="submit">Submit</button>
        <div class="reviews" id="reviews">
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        const stars = document.querySelectorAll(".star");
const rating = document.getElementById("rating");
const reviewText = document.getElementById("review");
const submitBtn = document.getElementById("submit");
const reviewsContainer = document.getElementById("reviews");
 
stars.forEach((star) => {
    star.addEventListener("click", () => {
        const value = parseInt(star.getAttribute("data-value"));
        rating.innerText = value;
 
        // Remove all existing classes from stars
        stars.forEach((s) => s.classList.remove("one", 
                                                "two", 
                                                "three", 
                                                "four", 
                                                "five"));
 
        // Add the appropriate class to 
        // each star based on the selected star's value
        stars.forEach((s, index) => {
            if (index < value) {
                s.classList.add(getStarColorClass(value));
            }
        });
 
        // Remove "selected" class from all stars
        stars.forEach((s) => s.classList.remove("selected"));
        // Add "selected" class to the clicked star
        star.classList.add("selected");
    });
});
 
submitBtn.addEventListener("click", () => {
    const review = reviewText.value;
    const userRating = parseInt(rating.innerText);
 
    if (!userRating || !review) {
        alert(
"Please select a rating and provide a review before submitting."
             );
        return;
    }
 
    if (userRating > 0) {
        const reviewElement = document.createElement("div");
        reviewElement.classList.add("review");
        reviewElement.innerHTML = 
`<p><strong>Rating: ${userRating}/5</strong></p><p>${review}</p>`;
        reviewsContainer.appendChild(reviewElement);
 
        // Reset styles after submitting
        reviewText.value = "";
        rating.innerText = "0";
        stars.forEach((s) => s.classList.remove("one", 
                                                "two", 
                                                "three", 
                                                "four", 
                                                "five", 
                                                "selected"));
    }
});
 
function getStarColorClass(value) {
    switch (value) {
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        default:
            return "";
    }
}
    </script>
</body>
 
</html>