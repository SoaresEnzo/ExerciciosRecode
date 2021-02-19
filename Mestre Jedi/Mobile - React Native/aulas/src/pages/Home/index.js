import React from 'react';
import { SafeAreaView, TouchableOpacity, Text } from 'react-native';

function Home(props) {
    const { navigation } = props;
    return (
        <SafeAreaView style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "#759"
        }}>
            <Text style={{
                color: "#fff",
            }}>Navigator 5.0</Text>

            <TouchableOpacity
                style={{
                    borderStartColor: "#00bb2d",
                    width: 50,
                    height: 30,
                    alignItems: "center",
                    justifyContent: "center",
                    borderRadius: 5
                }}
                title="Ir para Sobre"
                onPress={() => {
                    navigation.navigate("Sobre")
                }}>

                <Text style={{
                    color: "#125"
                }}>Sobre
                </Text>

            </TouchableOpacity>
        </SafeAreaView>
    );
}

export default Home;