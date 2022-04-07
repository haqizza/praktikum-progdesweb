import { useState } from "react";

function UserGreeting(props) {
    return <h1>Welcome back!</h1>;
}
 
function GuestGreeting(props) {
    return <h1>Please sign up.</h1>;
}
 
const Greeting = ()  => {
    
    const [isLoggedIn, setIsLoggedIn] = useState(true);

    const changeIsLoggedIn = () => {
      setIsLoggedIn(isLoggedIn ? false : true)
    }

    return(
        <div>
            {
                isLoggedIn ? <UserGreeting /> : <GuestGreeting />
                //if(isLoggedIn) {UserGreeting} else {GuestGreeting}
            }
            <button
              className = "button-blue"
              onClick = { changeIsLoggedIn }
            >
              Click me to change greeting
            </button>
            <button
              className = "button-blue"
              onClick = { () => setIsLoggedIn(isLoggedIn ? false : true) }
            >
              Also can click me to change greeting
            </button>
        </div>
    );
}
export default Greeting;