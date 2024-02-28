<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Welcome, USER.</title>
</head>
<body>

    
    <div class="first_page">
        <h1 class="big_font">Hello and welcome, <span class="hacker-text" data-value="USER">USER</span></h1>
    </div>
    <br><br>
    <div class="button">
        <a href=<?= base_url('home') ?>><b>Proceed</b></a>
    </div>
    <script>

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

class HackerText {
    constructor(element) {
        this.element = element;
        this.iterations = 0;
        this.startAnimation();
    }

    startAnimation() {
        const interval = setInterval(() => {
            this.element.innerText = this.element.innerText.split("")
                .map((letter, index) => {
                    if (index < this.iterations) {
                        return this.element.dataset.value[index];
                    }
                    return letters[Math.floor(Math.random() * 26)];
                })
                .join("");

            if (this.iterations >= this.element.dataset.value.length) {
                clearInterval(interval);
                setTimeout(() => {
                    this.iterations = 0;
                    this.startAnimation();
                }, 1000);
            }

            this.iterations += 1;
        }, 30);
    }
}

// Apply the class to each element with the "hacker-text" class
const hackerTextElements = document.querySelectorAll('.hacker-text');
hackerTextElements.forEach(element => new HackerText(element));

    </script>
    
</body>
</html>

