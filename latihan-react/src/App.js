import Home from "../screen/Home";

function App() {
  return (
    <>
      <Home name={names}/>
    </>
  );
}
const names = {
  a:"Sara",
  b:"Jihan"
}

export default App;
