import numpy

# Calculating the fitness value of each solution in the current population.
# The fitness function calulates the sum of products between each input and its corresponding weight.
def cal_pop_fitness_hard(equation_inputs, pop):    
    # Satisfy three hard constraints
    #if(There cannot be two classes of the same faculty at the same time): This type of condition check
    #    return softconstraints()
    #else:
    #    return fitness
    fitness = numpy.sum(pop*equation_inputs, axis=1)
    return fitness 

def cal_pop_fitness_soft(equation_inputs, pop):
    reward_count=0
    #Satisfy required constraints and count reward for each and every 
    #constraint satisfaction
    #if(3 to 4 section needs to be held in different time slots and days to cover up four days of working hours of week):
    #    reward_count++
    #if(10.00 to 1.30 will get the maximum priority for each and every course):
    #    reward_count++
    #if(8.30 to 10.00 and 3.00 to 4.30 will ge minimum priority for each and every course):
    #    reward_count++
    return 