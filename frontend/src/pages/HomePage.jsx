import reactLogo from '../assets/react.svg'
import viteLogo from '../assets/vite.svg'
import {useDispatch, useSelector} from "react-redux";
import {decrement, increment} from "../redux/reducers/counterReducer";
import PostList from "../components/PostList/PostList";
import CreatePostForm from "../components/CreatePostForm/CreatePostForm";

export const HomePage = () => {
    const count = useSelector((state) => state.counter);
    const dispatch = useDispatch();

    return (
        <>
            <div>
                <a href="https://vitejs.dev" target="_blank" rel="noreferrer">
                    <img src={viteLogo} className="logo" alt="Vite logo"/>
                </a>
                <a href="https://react.dev" target="_blank" rel="noreferrer">
                    <img src={reactLogo} className="logo react" alt="React logo"/>
                </a>
            </div>
            <h1>Vite + React</h1>
            <div className="card">
                <button onClick={() => dispatch(increment())}>
                    count is {count}
                </button>
                <button onClick={() => dispatch(decrement())}>
                    decremente
                </button>
                <p>
                    Edit <code>src/App.jsx</code> and save to test HMR
                </p>
            </div>
            <p className="read-the-docs">
                Click on the Vite and React logos to learn more
            </p>
            <CreatePostForm/>
            <PostList/>
        </>
    )
}