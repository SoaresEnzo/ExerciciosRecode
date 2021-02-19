import { StatusBar, TouchableOpacity } from 'react-native';
import React, { useState } from 'react';
import { StyleSheet, Text, View, Image, TextInput, Button, Alert } from 'react-native';

export default function App() {
  const [nome, setNome] = useState("")
  const [senha, setSenha] = useState("")
  const [email, setEmail] = useState("")

  const cadastro = () => {
    alert(nome)
    alert(senha)
    alert(email)
  }

  return (
    <View style={styles.container}>
      <Text>Enfim meu primeiro APP!</Text>

      <Image source={require('./assets/logo.jpg')} style={styles.logo}
      />

      <TextInput style={styles.input} placeholder="Digite seu usuario" onChangeText={text => { setNome(text) }} />

      <TextInput style={styles.input} placeholder="Digite seu e-mail" onChangeText={text => { setEmail(text) }} />

      <TextInput style={styles.input} placeholder="Digite sua senha" onChangeText={text => { setSenha(text) }}
        secureTextEntry={true} />

      <TouchableOpacity style={styles.btncadastro} onPress={cadastro}>
        <Text>Cadastrar</Text>
      </TouchableOpacity>

      {/* <Button title="Login" onPress={() => Alert.alert('Alerta de clique!')}
      />
       <Button title="limpa" onPress={() => Alert.alert('Alerta de clique!')}
      /> */}

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#3b5998',
    alignItems: 'center',
    justifyContent: 'center',
  },
  logo: {
    width: 150,
    height: 150,
    borderRadius: 100
  },
  input: {
    marginTop: 10,
    padding: 10,
    width: 350,
    backgroundColor: '#fff',
    fontSize: 15,
    borderRadius: 50

  },
  btncadastro: {
    width: 350,
    height: 40,
    backgroundColor: "#f00",
    borderRadius: 100,
    display: "flex",
    alignItems: "center",
    justifyContent: "center"
  }
});
