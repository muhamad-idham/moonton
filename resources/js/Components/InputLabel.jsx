export default function InputLabel({ value, className = '', children, forInput }) {
    return (
        <label 
            htmlFor={forInput}
            className={`block mb-2 text-base ` + className}
        >
            {value ? value : children}
        </label>
    );
}
