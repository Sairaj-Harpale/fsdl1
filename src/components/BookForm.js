import { useState } from "react";

function BookForm({ addBook }) {
  const [book, setBook] = useState({
    name: "",
    author: "",
    isbn: ""
  });

  const [error, setError] = useState("");
  const [success, setSuccess] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();

    if (!book.name || !book.author || !book.isbn) {
      setError("All fields are required");
      return;
    }

    setError("");
    addBook(book);

    setBook({ name: "", author: "", isbn: "" });
    setSuccess("Book added successfully!");
  };

  return (
    <div>
      <h2>Add Book</h2>

      <form onSubmit={handleSubmit}>
        <input
          placeholder="Book Name"
          value={book.name}
          onChange={(e) =>
            setBook({ ...book, name: e.target.value })
          }
        />

        <input
          placeholder="Author"
          value={book.author}
          onChange={(e) =>
            setBook({ ...book, author: e.target.value })
          }
        />

        <input
          placeholder="ISBN"
          value={book.isbn}
          onChange={(e) =>
            setBook({ ...book, isbn: e.target.value })
          }
        />

        <button type="submit">Add Book</button>
      </form>
      <p style={{ color: "green" }}>{success}</p>
      <p style={{ color: "red" }}>{error}</p>
    </div>
  );
}

export default BookForm;