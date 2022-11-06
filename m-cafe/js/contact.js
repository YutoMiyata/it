let textarea = document.querySelector('#message');

//残り文字数のテキスト作成
let textMessage = document.createElement('div');
//最大文字数を取得
let maxTextNum = textarea.getAttribute('maxlength');

let parent = textarea.parentElement;
parent.insertBefore(textMessage,textarea);

textarea.addEventListener('keyup',function() {
    let currentTextNum = textarea.value.length;
    textMessage.innerHTML = '<p>残り文字数は「' + (maxTextNum - currentTextNum) + '」文字です!';
});