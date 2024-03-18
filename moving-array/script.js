const CHANGE_TYPE = {
  UP: "UP",
  DOWN: "DOWN",
};
const ERROR_TYPE = {
  NOT_FOUND: "NOT_FOUND",
  NOT_POSSIBLE: "NOT_POSSIBLE",
  INVALID_INPUT: "INVALID_INPUT",
};
let numbers = [4, 6, 10, 23, 0, 24, 30, 2];

// Your code here...
function generateNumberArraysInDiv(numbers){
  let numberContainer = document.getElementById('numbers-container');
  let result = '';
  for(let i = 0; i < numbers.length ; i++){
    result = result + "<span>" + numbers[i] + "</span>";
  }
  numberContainer.innerHTML = result;
}

function changePossiblity(numbers ,founded_index, count, type){
  let length = numbers.length;
  if (type === CHANGE_TYPE.DOWN){
    if (founded_index - count < 0){
      return false;
    }else{
      return true;
    }
  }else{
    if (founded_index + count > length -1){
      return false;
    }else{
      return true;
    }
  }
}

function changeArray(numbers, item_val, count_val, type){
  let index = numbers.indexOf(item_val);
  if (type === CHANGE_TYPE.DOWN){
    numbers.splice(index - count_val, 0, numbers.splice(index, 1)[0]);
  }else{
    numbers.splice(index + count_val, 0, numbers.splice(index, 1)[0]);
  }
  return numbers;
}

generateNumberArraysInDiv(numbers);

document.getElementById("submit-btn").addEventListener("click", myFunction);

function myFunction() {
  const radioType = document.getElementsByName('type');
  let type = '';
  for(let i = 0; i< radioType.length; i++){
    if (radioType[i].checked === true){
      type = radioType[i].value;
    }
  }
  const item_input = document.getElementById("item-input");
  const count_input = document.getElementById("count-input");

  let item_val = parseInt(item_input.value);
  let count_val = parseInt(count_input.value);
  const error_container = document.getElementById("error-container");


  if (isNaN(item_val) || isNaN(count_val)){
    error_container.innerHTML = "<p id='error'>" + ERROR_TYPE.INVALID_INPUT + "</p>";
    return 0;
  }else if (numbers.indexOf(item_val) === -1){
    error_container.innerHTML = "<p id='error'>" + ERROR_TYPE.NOT_FOUND + "</p>";
    return 0;
  }else if(changePossiblity(numbers, numbers.indexOf(item_val), count_val, type) === false){
    error_container.innerHTML = "<p id='error'>" + ERROR_TYPE.NOT_POSSIBLE + "</p>";
    return 0;
  }else{
    error_container.innerHTML = null;
  }

  generateNumberArraysInDiv(changeArray(numbers, item_val, count_val, type));
}