FROM maven:3.9.3 AS build
COPY . .
RUN mvn clean package -DskipTests

FROM openjdk:20-jdk-slim
COPY --from=build /target/*.jar demo.jar
EXPOSE 8080
ENTRYPOINT ["java","-jar","demo.jar"]
