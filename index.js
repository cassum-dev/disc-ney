const Discord = require('discord.js');
const config = require('./config.json');

const webhookClient = new Discord.WebhookClient(config.webhookID, config.webhookToken);

const embed = new Discord.MessageEmbed()
    .setTitle('UNIÃO NEYMAR!')
    .setColor('#0099ff');

webhookClient.send('Menino Ney', {
    username: 'neymar',
    avatarURL: 'https://conteudo.imguol.com.br/c/esporte/86/2020/08/12/neymar-de-moicano-quando-ainda-vestia-a-camisa-do-santos-1597228374622_v2_450x450.jpg',
    embeds: [embed],
});
