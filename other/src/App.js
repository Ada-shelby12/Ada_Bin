import React, { useState } from "react";

function Todolist() {
  const [todos, setTodos] = useState([]);
  const [inputValue, setInputValue] = useState('');

  function changeHandle(e) {
    setInputValue(e.target.value);
  }

  function handleSubmit(e) {
    e.preventDefault();
    if (inputValue.trim() !== '') {
      setTodos([...todos, inputValue]);
      setInputValue('');
    }
  }

  return (
    <div>
      <h1>TODO LIST</h1>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={inputValue}
          onChange={changeHandle}
          placeholder="Enter a task"
        />
        <button type="submit">Add TO-DO</button>
      </form>
      <ul>
        {todos.map((todo, index) => (
          <li key={index}>
            {todo}
            <button
              onClick={() =>
                setTodos(todos.filter((_, i) => i !== index))
              }
            >
              Delete
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Todolist;