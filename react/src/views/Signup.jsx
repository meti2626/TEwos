import { Link  } from 'react-router-dom';
import {useRef} from "react";
import axiosClient from '../axios-client.js';
import {useStateContext}  from "../context/ContextProvider.jsx";

export default function Signup() {

  const nameRef = useRef();
  const emailRef = useRef();
    const passwordRef = useRef();
    const confirmPasswordRef = useRef();

   const {setUser,setToken} = useStateContext()


  const onSubmit = (ev) =>
  {
    ev.preventDefault()
   const payload ={
    name: nameRef.current.value,
    email: emailRef.current.value,
    password: passwordRef.current.value,
    confirmPassword: confirmPasswordRef.current.value
   }


     axiosClient.post('/signup', payload)
        .then(({data}) =>{
            setUser(data.user)
            setToken(data.token)
        })
  }

  return (

            <form onSubmit={onSubmit}>
                <h1 className='title'>
                    Signup
                </h1>
                <input type='name' placeholder='Full Name' ref={nameRef} />
                <input type='email' placeholder='Email' ref={emailRef} />
                <input type='password'  placeholder='Password' ref={passwordRef} />
                <input type='password'  placeholder='Confirm Password' ref={confirmPasswordRef} />
                <button className='btn btn-block'>Signup</button>

                <p className='message'>
                    Already Registered? <Link to='/login'>Login here</Link>
                </p>
            </form>

)
}
