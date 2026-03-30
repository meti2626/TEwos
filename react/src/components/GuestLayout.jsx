import React from 'react'
import { Outlet } from 'react-router-dom'

export default function GuestLayout() {
  return (
    <div>
{/* //rendering child routes */}

    <Outlet />


    </div>
  )
}
