import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Home from './src/pages/Home';
import Sobre from './src/pages/Sobre';

const Stack = createStackNavigator();
function App() {
    return (
        <NavigationContainer initialRouteName="Home">
            <Stack.Navigator>
                <Stack.Screen name="Home" component={Home} option={{ title: "Home" }} />
                <Stack.Screen name="Sobre" component={Sobre} option={{ title: "Sobre" }} />

            </Stack.Navigator>
        </NavigationContainer>
    )
}

export default App;