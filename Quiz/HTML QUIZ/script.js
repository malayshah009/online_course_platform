const quizData = [
  {
    question: "What does HTML stand for?",
    a: "Hypertext Markup Language",
    b: "Hypertext Markdown Language",
    c: "Hyperloop Machine Language",
    d: "Helicopters Terminals Motorboats Lamborginis",
    correct: "a",
  },
  {
    question:
      "Which of the following tags is used to add a line-break in HTML?",
    a: "<br>",
    b: "<break>",
    c: "</break>",
    d: "</br>",
    correct: "a",
  },
  {
    question: "Which of these tags would display the largest text?",
    a: "<h2>",
    b: "<h1>",
    c: "<h4>",
    d: "<h6>",
    correct: "b",
  },
  {
    question: "Which character is used to indicate an end tag?",
    a: "*",
    b: "^",
    c: ">",
    d: "/",
    correct: "d",
  },
  {
    question: "What is the difference between HTML and CSS?",
    a: "CSS is one type of HTML.",
    b: "CSS structures a webpage. HTML strictly provides styling.",
    c: "HTML gives a webpage structure. CSS provides styling.",
    d: "There is no difference.",
    correct: "c",
  },
  {
    question: "What is the purpose of using div tags in HTML?",
    a: "For creating Different styles.",
    b: "For creating different sections.",
    c: "For adding headings.",
    d: "For adding titles.",
    correct: "b",
  },
  {
    question:
      "Which of the following property is used to set the width of an image?",
    a: "border.",
    b: "height.",
    c: "width.",
    d: "moz-opacity.",
    correct: "c",
  },
  {
    question:
      "Which of the following HTML Elements is used for making any text bold ?",
    a: "<p>.",
    b: "<i>.",
    c: "<li>.",
    d: "<b>.",
    correct: "d",
  },
  {
    question: "How many heading tags are there in HTML5?",
    a: "1.",
    b: "3.",
    c: "5.",
    d: "6.",
    correct: "d",
  },
  {
    question:
      "Which of the following attributes is used to add link to any element?",
    a: "link.",
    b: "href.",
    c: "ref.",
    d: "newref.",
    correct: "b",
  },
];

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();

  const currentQuizData = quizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
}

function deselectAnswers() {
  answerEls.forEach((answerEl) => (answerEl.checked = false));
}

function getSelected() {
  let answer;

  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });

  return answer;
}

submitBtn.addEventListener("click", () => {
  const answer = getSelected();

  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }

    currentQuiz++;

    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `
                <h2>You answered ${score}/${quizData.length} questions correctly</h2>

                <button onclick="location.href='../select_quiz.php'">Change Test</button>
            `;
    }
  }
});
