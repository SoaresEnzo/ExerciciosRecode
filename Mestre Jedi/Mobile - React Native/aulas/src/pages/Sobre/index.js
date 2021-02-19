import React from 'react';
import { View, TouchableOpacity, Text, Button } from 'react-native';

function Sobre({navigation}) {
    return (
        <View style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "#cdcdcd"
        }}>
            <Button title="React é tech" onPress={()=> navigation.navigate('Home',{})}>

            </Button>
            
        </View>
    );
}

export default Sobre;