const quizData = [
  {
    question: "Who developed the Python language?",
    a: "Wick van Rossum",
    b: "Guido van Rossum",
    c: "Niene Stom",
    d: "Zim Den",
    correct: "b",
  },
  {
    question: "In which year was the Python language developed?",
    a: "1991",
    b: "1987",
    c: "1989",
    d: "1990",
    correct: "c",
  },
  {
    question: "In which language is Python written?",
    a: "C",
    b: "English",
    c: "PHP",
    d: "All of the above",
    correct: "a",
  },
  {
    question:
      " Which one of the following is the correct extension of the Python file?",
    a: ".pyth",
    b: ".python",
    c: ".p",
    d: ".py",
    correct: "d",
  },
  {
    question: "What do we use to define a block of code in Python language?",
    a: "Key",
    b: "Indentation",
    c: "Brackets",
    d: "None of these",
    correct: "b",
  },
  {
    question:
      "Which character is used in Python to make a single line comment?",
    a: "#",
    b: "$",
    c: "/",
    d: "//",
    correct: "a",
  },
  {
    question:
      "Which of the following statements is correct regarding the object-oriented programming concept in Python?",
    a: "Classes are real-world entities while objects are not real",
    b: "Objects are real-world entities while classes are not real",
    c: "Both objects and classes are real-world entities",
    d: "All of the above",
    correct: "b",
  },
  {
    question: "In which year was the Python 3.0 version developed?",
    a: "2005,December",
    b: "2007,December",
    c: "2010,December",
    d: "2008,December",
    correct: "d",
  },
  {
    question: "What is the method inside the class in python language?",
    a: "Object",
    b: "Argument",
    c: "Function",
    d: "Attribute",
    correct: "c",
  },
  {
    question: "Which of the following is not a keyword in Python language?",
    a: "val",
    b: "raise",
    c: "try",
    d: "with",
    correct: "a",
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
