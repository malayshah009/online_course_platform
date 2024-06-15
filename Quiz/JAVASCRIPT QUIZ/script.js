const quizData = [
  {
    question: "Inside which HTML element do we put the JavaScript?",
    a: "<javascript>",
    b: "<scripting>",
    c: "<script>",
    d: "<js>",
    correct: "c",
  },
  {
    question: "Where is the correct place to insert a JavaScript?",
    a: "The <head> section",
    b: "The <body> section",
    c: "Both the <head> section and the <body> section are correct",
    d: "None of these",
    correct: "c",
  },
  {
    question: "What is the extension of Javascript?",
    a: ".java",
    b: ".script",
    c: ".javascript",
    d: ".js",
    correct: "d",
  },
  {
    question: "The external JavaScript file must contain the <script> tag.",
    a: "True",
    b: "False",
    c: "Sometimes its needed",
    d: "None of these",
    correct: "b",
  },
  {
    question: "Which type of JavaScript language is ___",
    a: "Object-Oriented",
    b: "High-level",
    c: "Assembly-language",
    d: "Object-Based.",
    correct: "d",
  },
  {
    question: "The function and var are known as?",
    a: "Declaration statements",
    b: "Keywords",
    c: "Data types",
    d: "Prototypes",
    correct: "a",
  },
  {
    question:
      "Which one of the following is the correct way for calling the JavaScript code?",
    a: "Preprocessor",
    b: "Triggering Event",
    c: "Function/Method",
    d: "RMI",
    correct: "c",
  },
  {
    question: "Which of the following type of a variable is volatile?",
    a: "Mutable variable",
    b: "Dynamic variable",
    c: "Volatile variable",
    d: "Immutable variable",
    correct: "a",
  },
  {
    question: "In JavaScript the x===y statement implies that?",
    a: "Both x and y are equal in value, type and reference address as well.",
    b: "Both are equal in the value and data type.",
    c: "Both are x and y are equal in value only.",
    d: "Both are not same at all.",
    correct: "b",
  },
  {
    question:
      "Which one of the following statement is most suitable to check if the pattern matches with the sting= text?",
    a: "test(text).",
    b: "equals(pattern).",
    c: "test(pattern).",
    d: "text==pattern.",
    correct: "d",
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
