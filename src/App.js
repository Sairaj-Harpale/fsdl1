import "./App.css";
import { useState } from "react";
import BookForm from "./components/BookForm";
import BookList from "./components/BookList";

function App() {
  const [books, setBooks] = useState([]);

  const addBook = (book) => {
    setBooks([...books, book]);
  };

  const deleteBook = (index) => {
    const updated = books.filter((_, i) => i !== index);
    setBooks(updated);
  };

  return (
  <div>
    <h1>Library Management System</h1>

    <div style={{ width: "80%", margin: "auto" }}>
      <BookForm addBook={addBook} />
      <BookList books={books} deleteBook={deleteBook} />
    </div>
  </div>
);
}

export default App;