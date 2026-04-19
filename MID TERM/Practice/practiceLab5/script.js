function analyzeText() {
    let text= document.getElementById("inputText").value;

    let reverseTextOutput = document.getElementById("reverse");
    reverseTextOutput.innerHTML += text.split("").reverse().join("");

    let charCountOutput= document.getElementById("charCount");
    charCountOutput.innerHTML += text.length;

    let wordCountOutput= document.getElementById("wordCount");
    wordCountOutput.innerHTML += text.trim().split(/\s+/).length;
}