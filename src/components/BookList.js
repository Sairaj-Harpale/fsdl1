function BookList({ books, deleteBook }) {
  return (
    <div>
      <h2>Book List</h2>

      <table border="1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          {books.map((b, index) => (
            <tr key={index}>
              <td>{b.name}</td>
              <td>{b.author}</td>
              <td>{b.isbn}</td>
              <td>
                <button onClick={() => deleteBook(index)}>
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default BookList;