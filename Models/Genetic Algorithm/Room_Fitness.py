import numpy

# Calculating the fitness value of each solution in the current population.
# The fitness function calulates the sum of products between each input and its corresponding weight.
def cal_pop_fitness_hard(equation_inputs, pop):    
    # Satisfy three hard constraints
    #if(There cannot be two classes in the same room at the same time): This type of condition check
    #    return softconstraints()
    #else:
    #    return fitness
    fitness = numpy.sum(pop*equation_inputs, axis=1)
    return fitness 

def cal_pop_fitness_soft(equation_inputs, pop):
    reward_count=0
    #Satisfy required constraints and count reward for each and every 
    #constraint satisfaction
    #if(BSCSE’s class will primarily held of 4th floor.(Both departmental and non departmental)):
    #    reward_count++
    #if(BSEEE’s class will primarily held on 3rd floor.(Both departmental and non departmental)):
    #    reward_count++
    #if(BBA’s class will primarily held on 2nd floor.(Both departmental and non departmental)):
    #    reward_count++
    #if(Rooms minimum section limit 10):
    #    reward_count++
    #if(Rooms maximum section limit 20):
    #    reward_count++
    return 
