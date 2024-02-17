var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var W = window.innerWidth;
var H = window.innerHeight;

canvas.width = W;
canvas.height = H;

var fontSize = 16;
var columns = Math.floor(W / fontSize);
var drops = [];
for (var i = 0; i < columns; i++) {
    drops.push(0);
}
var str = "JavaScript Hacking Effect";
function draw() {
    context.fillStyle = "rgba(0,0,0,0.05)";
    context.fillRect(0, 0, W, H);
    context.fontSize = "700 " + fontSize + "px";
    context.fillStyle = "#00cc33";
    for (var i = 0; i < columns; i++) {
        var index = Math.floor(Math.random() * str.length);
        var x = i * fontSize;
        var y = drops[i] * fontSize;
        context.fillText(str[index], x, y);
        if (y >= canvas.height && Math.random() > 0.99) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}
draw();
setInterval(draw, 35);

// Hacker Text Starts Here

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

// Module for managing the quiz
class QuizManager {
    constructor() {
      this.quizData = [];
      this.userScore = 0;
      this.currentQuestionIndex = 0;
    }
  
    // Async function to fetch quiz data
    async fetchQuizData() {
      // Simulating fetching data from a server with a delay
      return new Promise(resolve => {
        setTimeout(() => {
          // Objects: Representing quiz question with properties
          resolve([
            { question: "What is Maryrose's favorite color?", options: ["Red", "Green", "Orange", "Pink", "Black", "Mint Green"], correctAnswer: "Pink" },
          ]);
        }, 1000);
      });
    }
  
    // Function to start the quiz
    startQuiz() {
      // Using the async function to fetch quiz data
      this.fetchQuizData().then(data => {
        this.quizData = data;
        this.renderQuestion();
      });
    }
  

    // Init Function
    renderQuestion() {
        const quizContainer = document.getElementById("quizContainer");
        quizContainer.innerHTML = '';
    
        if (this.currentQuestionIndex < this.quizData.length) {
          // Objects: Representing the current quiz question
          const currentQuestion = this.quizData[this.currentQuestionIndex];
          const questionElement = document.createElement('div');
          questionElement.innerHTML = `
            <h2>${currentQuestion.question}</h2>
            <ul>
              ${currentQuestion.options.map(option => `<li><button onclick="quizManager.checkAnswer('${option}')">${option}</button></li>`).join('')}
            </ul>
          `;
          quizContainer.appendChild(questionElement);
        } else {
          this.showScore();
        }
      }
    // Function to check the user's answer
    checkAnswer(userAnswer) {
        const currentQuestion = this.quizData[this.currentQuestionIndex];
        if (userAnswer === currentQuestion.correctAnswer) {
          this.userScore++;
        }
        this.currentQuestionIndex++;
        this.renderQuestion();
      }
    
      showScore() {
        const quizContainer = document.getElementById("quizContainer");
        quizContainer.innerHTML = `
          <h2>Quiz Completed</h2>
          <p>Your Score: ${this.userScore} out of ${this.quizData.length}</p>
        `;
      }
    }
    
    // Instantiate the QuizManager class
    const quizManager = new QuizManager();
    quizManager.startQuiz();  // Start the quiz  
