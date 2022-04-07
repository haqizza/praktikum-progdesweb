import { useState } from 'react';
import Button from '../components/Button';

function Home() {

  const [buttonClass, setButtonClass] = useState('button-red');

  const changeButtonColor = () =>{
    setButtonClass('button-blue');
  }

  return (
    <>
      <Button
          style = {{
              backgroundColor: "lightgrey",
              borderRadius: 15,
          }}
          text = "Button 1"
      />
      <Button
          className = {buttonClass}
          text = "Button 2"
          onClick = {changeButtonColor}
      />
    </>
  );
}

export default Home;