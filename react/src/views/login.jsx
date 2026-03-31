import React from 'react'
import {Link} from 'react-router-dom';


const onSubmit = (ev)=>
{
 ev.preventDefault()
}

export default function Login() {
  return (

            <form onSubmit={onSubmit}>
                <h1 className='title'>Login </h1>

                <input type='email' placeholder='Email'   />
                <input type='password'  placeholder='Password' />
                <button  className='btn btn-block'>Login</button>

                <p className='message'>
                    Not Registered? <Link to='/signup'>Create an account</Link>
                </p>
            </form>

  )
}
