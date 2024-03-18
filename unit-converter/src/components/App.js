import React, { useState } from "react";
import Select from "./Select";
import Input from "./Input";
import { units } from "../units";

function App() {
  const [result, setResult] = useState(0);

  return (
    <>
      <div className="converter-form">
        <Input label="Amount" />

        <div className="row">
          <Select label="From" items={ ['sasf', 'asldfk'] }/>
          <Select label="to" items={ ['sasf', 'asldfk'] } />

          <button>Convert</button>
        </div>
      </div>

      <div id="result">
        Result is: <span data-testid="result">{result}</span>
      </div>
    </>
  );
}

export default App;
