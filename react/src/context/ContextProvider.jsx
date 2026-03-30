import { createContext, useState} from "react";

const StateContext =  createContext({
    currentUser : null,
    token:null

});

export const ContextProvider = ({children}) =>{
    const [user, _setUser] = useState( {});
   const [token, _setToken] = useState(null);

    return(
        <StateContext.Provider value={{
            currentUser: user,
            token: token
        }}>



        </StateContext.Provider>
    )
}
