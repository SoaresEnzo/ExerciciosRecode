import React, { useState } from 'react';
import { SafeAreaView, View, FlatList, StyleSheet, Text, StatusBar, Image, TextInput, ViewComponent, TouchableOpacity } from 'react-native';
import Checkbox from 'expo-checkbox';

const DATA = [
    {
        id: '1',
        placeholder: 'First Name',
    },
    {
        id: '2',
        placeholder: 'Last Name',
    },
    {
        id: '3',
        placeholder: 'User Name',
    },
    {
        id: '4',
        placeholder: 'E-mail Address',
    },
    {
        id: '5',
        placeholder: 'Password',
        secureTextEntry: true
    },
];

const Item = ({ placeholder, secureTextEntry }) => (
    <View style={styles.item}>
        <TextInput style={styles.inputs} secureTextEntry={secureTextEntry} placeholder={placeholder} />
    </View>
);

const App = () => {
    const renderItem = ({ item }) => (
        <Item placeholder={item.placeholder} secureTextEntry={item.secureTextEntry} />
    );
    const [isChecked, setChecked] = useState(false);

    return (
        <View style={styles.pseudoHtml}>
            <StatusBar />
            <View style={styles.mainView}>
                <Image source={require('./assets/logo.jpg')} style={styles.logo} />

                <SafeAreaView style={styles.container}>
                    <FlatList
                        data={DATA}
                        renderItem={renderItem}
                        keyExtractor={item => item.id}
                    />
                </SafeAreaView>

                <View style={styles.checkBox}>
                    <Checkbox style={styles.checaCaixa} value={isChecked} onValueChange={setChecked} />
                    <Text style={styles.checkText}>I agree to the Terms</Text>
                </View>

                <TouchableOpacity style={styles.btnRegister}>

                    <Text style={styles.register}>REGISTER</Text>
                </TouchableOpacity>
            </View>
        </View>
    );

}

const styles = StyleSheet.create({
    container: {
        width: "100%"
    },
    item: {
        backgroundColor: "rgba(255,255,255,0.3)",
        padding: 4,
        marginVertical: 8,
        marginHorizontal: 16,
        borderRadius: 10
    },
    mainView: {
        width: "75%",
        marginHorizontal: "auto",
        display: "flex",
        alignItems: "center",
        padding: 0
    },
    logo: {
        width: 96,
        height: 96,
        borderRadius: 100,
        marginTop: 32
    },
    inputs: {
        fontSize: 24,
        placeholderTextColor: "#ffffff",
        placeholderWeight: 100
    },
    pseudoHtml: {
        width: "100vw",
        minHeight: "100vh",
        backgroundImage: "linear-gradient(-45deg, rgba(232,255,0,1) 0%, rgba(235,17,208,1) 100%)"
    },
    register: {
        backgroundColor: '#ffffff',
        padding: 4,
        marginVertical: 8,
        marginHorizontal: 16,
        color: 'black',
        fontSize: 24,
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        borderRadius: 10,
        letterSpacing: 5
    },
    btnRegister: {
        width: "100%"
    },
    checkBox:{
        width: "100%",
        display: "flex",
        flexDirection: "row",
        alignItems: "center"
    },
    checkText: {
        color: "#ffffff",
        fontSize: 16,
        fontWeight: 600,
        marginLeft: 16,
        letterSpacing: 2
    },
    checaCaixa: {
        marginLeft: 16,
        width: 16,
        height: 16,
        display: "flex",
        alignItems: "center",
        justifyContent: "center"
    }
});

export default App;