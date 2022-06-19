
from fastcore.transform import Pipeline
from pipeline_functions import remove_spaces, remove_special_chars, lowercase


def main(input_string):
    # Creates a pipeline with a list of functions
    pipe = Pipeline([remove_spaces, remove_special_chars, lowercase])
    
    # Invokes pipeline
    output = pipe(input_string)

    print(f"""output ==> {output}""")


if __name__ == '__main__':
    text = input("Enter input string: ")
    main(text)