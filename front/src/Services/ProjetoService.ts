import api from "./api";
import { IProjeto } from "../@types/projeto";
import { AxiosResponse } from "axios";

class ProjetoService {
  async fetchAll(): Promise<AxiosResponse<IProjeto[]>> {
    try {
      const response = await api.get("/projetos");
      console.log("API Response Data:", response.data);
      return response;
    } catch (error) {
      console.error("API Error:", error);
      throw error;
    }
  }
}

export default new ProjetoService();
