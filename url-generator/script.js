class Query{
  constructor(key, value) {
    this.key = key;
    this.value = value;
  }
}

const paramTemplate = `<input class="q-input" placeholder="Param" />`;
const queryTemplate =
  `<input class="q-input" placeholder="Query Key" />
            <input class="q-input" placeholder="Query Value" />
          `;

let params = [];
let queries = [];
const baseUrl = "https://website.ir";

const setParamsArray = () => {
  const paramsContainer = document.getElementById('params-container');
  const paramsInputs = paramsContainer.getElementsByTagName("input");
  for (let i = 0; i < paramsInputs.length; i++) {
    params.push(paramsInputs[i].value);
  }
  return null;
}

const addNewParam = () => {
  const paramsContainer = document.getElementById('params-container');
  const divElement = document.createElement("div");
  divElement.className = "keyValue-box";
  divElement.innerHTML = paramTemplate;
  if (params[params.length - 1] !== '' &&  params[params.length - 1] !== null &&
      params[params.length - 1] !== undefined){
    paramsContainer.appendChild(divElement);
  }
};
const addNewQuery = () => {
  const queriesContainer = document.getElementById('queries-container');
  const divElement = document.createElement("div");
  divElement.className = "keyValue-box";
  divElement.innerHTML = queryTemplate;
  queriesContainer.appendChild(divElement);
};
const generateURL = () => {
  renderUrl(baseUrl);
};
setParamsArray();
const renderUrl = (url) => {
  const el = document.getElementById("url-container");
  el.innerHTML = `<p>${url}</p>`;
};

document.getElementById("param-submit").addEventListener("click", addNewParam);
document.getElementById("query-submit").addEventListener("click", addNewQuery);
document.getElementById("generate").addEventListener("click", generateURL);
