const quizData = [
  {
    question: "What does CSS stand for?",
    a: "Creative Style Sheets",
    b: "Cascading Style Sheets",
    c: "Colorful Style Sheets",
    d: "Computer Style Sheets",
    correct: "b",
  },
  {
    question: "Which HTML tag is used to define an internal style sheet?",
    a: "<css>",
    b: "<style>",
    c: "<script>",
    d: "<design>",
    correct: "b",
  },
  {
    question: "Which HTML attribute is used to define inline styles?",
    a: "styles",
    b: "font",
    c: "style",
    d: "class",
    correct: "c",
  },
  {
    question: "Which is the correct CSS syntax?",
    a: "body {color: black;}",
    b: "{body:color=black;}",
    c: "body:color=black;",
    d: "{body;color:black;}",
    correct: "a",
  },
  {
    question: "How do you insert a comment in a CSS file?",
    a: "/* this is a comment */",
    b: "' this is a comment",
    c: "// this is a comment",
    d: "// this is a comment //",
    correct: "a",
  },
  {
    question: "Which property is used to change the background color?",
    a: "bgcolor",
    b: "color",
    c: "bg",
    d: "background-color",
    correct: "d",
  },
  {
    question: "How do you display hyperlinks without an underline?",
    a: "a {text-decoration:none;}",
    b: "a {underline:none;}",
    c: "a {text-decoration:no-underline;}",
    d: "a {decoration:no-underline;}",
    correct: "a",
  },
  {
    question:
      "Which CSS property is used to change the text color of an element?",
    a: "fgcolor",
    b: "text",
    c: "color",
    d: "text-color",
    correct: "c",
  },
  {
    question: "Which property is used to change the font of an element?",
    a: "font-weight",
    b: "font-change",
    c: "font-style",
    d: "font-family",
    correct: "d",
  },
  {
    question: "Which property is used to change the left margin of an element?",
    a: "indent",
    b: "align-left",
    c: "margin-left",
    d: "padding-left",
    correct: "c",
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
