import Welcome from '../componets/Welcome';

function Home(props) {
    return (
      <>
        <Welcome
            style={{color:"a"}}
            name={props.names}
        />
        <Welcome name="Jihan"/>
      </>
    );
}

const props = {
    names: {
        a:"Sara",
        b:"Jihan"
    }
}

export default Home;