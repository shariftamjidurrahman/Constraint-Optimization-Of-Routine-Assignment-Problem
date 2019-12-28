import numpy
import pandas as pd
pd.set_option('display.max_rows',None)
pd.set_option('display.max_columns',None)
## Inputs of the equation.
#equation_inputs = [4,-2,3.5,5,-11,-4.7]
#
## Number of the weights we are looking to optimize.
#num_weights = len(equation_inputs)
#sol_per_pop = 8
#num_parents_mating = 4
#
## Defining the population size.
#pop_size = (sol_per_pop,num_weights) # The population will have sol_per_pop chromosome where each chromosome has num_weights genes.
##Creating the initial population.
#new_population = numpy.random.uniform(low=-4.0, high=4.0, size=pop_size)
#print(new_population)

teachers = pd.read_excel('Teachers-BSCSE.xlsx')
equation_input_BSCSE_Faculty_Members=teachers["Faculty Member"]
print(equation_input_BSCSE_Faculty_Members)

# Number of the weights we are looking to optimize.
num_weights = len(equation_input_BSCSE_Faculty_Members)-1
print(num_weights)
print(len(teachers.columns)-1)


sol_per_pop = len(teachers.columns)-1
num_parents_mating = 4

# Defining the population size.
pop_size = (num_weights,sol_per_pop) # The population will have sol_per_pop chromosome where each chromosome has num_weights genes.
print(pop_size)

#Creating the initial population.
new_population = numpy.random.uniform(low=-4.0, high=4.0, size=pop_size)
print(new_population)


