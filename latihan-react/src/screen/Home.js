import { useState } from 'react';
import Button from '../components/Button';
import { EffectExample, EffectExample2 } from '../components/Effect';
import { Example, Example2 } from '../components/Example';
import Greeting from '../components/Greetings';
import NumberList from '../components/NumberList';

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
      <Greeting />
      {/* <NumberList /> */}
      {/* <Example /> */}
      {/* <Example2 /> */}
      {/* <EffectExample/> */}
      {/* <EffectExample2/> */}
    </>
  );
}

export default Home;